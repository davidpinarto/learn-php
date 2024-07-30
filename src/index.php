<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Karyawan;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config/database.php';

$app = AppFactory::create();

// tambah karyawan
$app->post('/karyawan', function (Request $request, Response $response, $args) {
    // dapatkan data pada request body
    $data = $request->getParsedBody();

    // Extract data yang dibutuhkan
    $fields = [
        'id' => $data['id'],
        'name' => $data['name'],
        'position' => $data['position'],
        'salary' => $data['salary']
    ];

    try {
        // buat model sesuai dengan data yang kita inginkan
        $karyawan = new Karyawan();
        $karyawan->id = $fields['id'];
        $karyawan->name = $fields['name'];
        $karyawan->position = $fields['position'];
        $karyawan->salary = $fields['salary'];
        $karyawan->save();

        $responseData = [
            'status' => 'success',
            'message' => 'data karyawan berhasil ditambahkan',
            'data' => $karyawan,
        ];

        $response->getBody()->write(json_encode($responseData));
        return $response->withHeader('Content-Type', 'application/json');
    } catch (\Exception $e) {
        $responseData = [
            'status' => 'error',
            'message' => $e->getMessage()
        ];

        $response->getBody()->write(json_encode($responseData));
        return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
    }
});

// dapatkan semua data karyawan
$app->get('/karyawan', function (Request $request, Response $response, $args) {
    $karyawan = Karyawan::all();
    $responseData = [
        'status' => 'success',
        'data' => $karyawan
    ];

    $response->getBody()->write(json_encode($responseData));
    return $response->withHeader('Content-Type', 'application/json');
});

// dapatkan data karyawan berdasarkan id
$app->get('/karyawan/{id}', function (Request $request, Response $response, $args) {
    try {
        $karyawan = Karyawan::find($args['id']);

        if ($karyawan) {
            $responseData = [
                'status' => 'success',
                'data' => $karyawan
            ];
        } else {
            $responseData = [
                'status' => 'error',
                'message' => 'data karyawan tidak ditemukan'
            ];
            return $response->withStatus(404);
        }

        $response->getBody()->write(json_encode($responseData));
        return $response->withHeader('Content-Type', 'application/json');
    } catch (\Exception $e) {
        $responseData = [
            'status' => 'error',
            'message' => $e->getMessage()
        ];

        $response->getBody()->write(json_encode($responseData));
        return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
    }
});

// perbarui data karyawan
$app->put('/karyawan/{id}', function (Request $request, Response $response, $args) {
    $data = $request->getParsedBody();
    try {
        $karyawan = Karyawan::find($args['id']);
        if ($karyawan) {
            // fill digunakan untuk mengisi data model array karyawan dengan data array yang berada pada body, dan akan langsung mengoveride data yang ada ketika method save terpanggil
            $karyawan->fill($data);
            $karyawan->save();

            $responseData = [
                'status' => 'success',
                'message' => 'data karyawan berhasil diperbarui',
            ];

            $response->getBody()->write(json_encode($responseData));
            return $response->withHeader('Content-Type', 'application/json');
        } else {
            $responseData = [
                'status' => 'error',
                'message' => 'data karyawan tidak ditemukan'
            ];

            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }
    } catch (\Exception $e) {
        $responseData = [
            'status' => 'error',
            'message' => $e->getMessage()
        ];
        $response->getBody()->write(json_encode($responseData));
        return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
    }
});

// hapus data karyawan
$app->delete('/karyawan/{id}', function (Request $request, Response $response, $args) {
    try {
        $karyawan = Karyawan::find($args['id']);
        if ($karyawan) {
            $karyawan->delete();

            $responseData = [
                'status' => 'success',
                'message' => 'data karyawan berhasil dihapus'
            ];

            $response->getBody()->write(json_encode($responseData));
            return $response->withHeader('Content-Type', 'application/json');
        } else {
            $responseData = [
                'status' => 'error',
                'message' => 'data karyawan tidak ditemukan'
            ];

            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }
    } catch (\Exception $e) {
        $responseData = [
            'status' => 'error',
            'message' => $e->getMessage()
        ];
        $response->getBody()->write(json_encode($responseData));
        return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
    }
});

$app->run();
