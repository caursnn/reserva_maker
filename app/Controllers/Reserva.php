<?php

namespace App\Controllers;

use App\Models\ReservaModel;

class Reserva extends BaseController
{
    public function index()
    {
        $reservaModel = new ReservaModel();
        $data['reservas'] = $reservaModel->findAll();

        return view('reservas/index', $data);
    }

    public function criar()
{
    return view('reservas/criar');
}

public function salvar()
{
    $model = new \App\Models\ReservaModel();

    $data = [
        'usuario_id' => $this->request->getPost('usuario_id'),
        'data' => $this->request->getPost('data'),
        'hora_inicio' => $this->request->getPost('hora_inicio'),
        'hora_fim' => $this->request->getPost('hora_fim'),
        'descricao' => $this->request->getPost('descricao'),
        'espaco_id' => $this->request->getPost('espaco_id'),
    ];

    $model->insert($data);

    // (opcional) enviar e-mail aqui depois
    return redirect()->to('/reserva')->with('msg', 'Reserva cadastrada com sucesso!');
}

}
