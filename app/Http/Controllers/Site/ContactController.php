<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Jobs\SendEmailJob;
use App\Mail\sendEmail;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('site.contact');
    }

    public function store(UserRequest $request)
    {
        $request->validated();
        $ultimaInscricao = Inscription::query()->latest()->first();

        $ultimaAtualizacaoCarbon = Carbon::parse($ultimaInscricao->ultima_atualizacao);

        if ($ultimaInscricao) {
            if (!$ultimaAtualizacaoCarbon->isToday()) {
                $ultimaInscricao->update([
                    'quantidade_inscricoes' => 0,
                    'ultima_atualizacao' => now(),
                ]);
            }
        } else {
            $ultimaInscricao = Inscription::query()->create([
                'quantidade_inscricoes' => 1,
                'ultima_atualizacao' => now(),
            ]);
        }

        if ($ultimaInscricao->quantidade_inscricoes >= 10) {
            return redirect()->back()->with('erro', '🥺 Ooops: Limite de inscrições diárias atingido. Tente novamente amanhã.');
        }

        $ultimaInscricao->increment('quantidade_inscricoes');

        $data = $request->except('_token');
        SendEmailJob::dispatch($data);

        return redirect()->back()->with('sucesso', 'Sua mensagem foi enviada, entraremos em contato em breve!');
    }
}
