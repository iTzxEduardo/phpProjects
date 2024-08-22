<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Projeto;

class ProjetoEntrado extends Notification
{
    protected $projeto;

    public function __construct(Projeto $projeto)
    {
        $this->projeto = $projeto;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'projeto_id' => $this->projeto->id,
            'projeto_nome' => $this->projeto->nome,
            'mensagem' => 'Você entrou no projeto: ' . $this->projeto->nome,
        ];
    }
}
