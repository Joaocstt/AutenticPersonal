<div class="row">
    <div class="double-items text-light">
        <div class="form col-md-6 col-sm-7">
            @if($errors->any())
                <div class="notification danger">
                    {{ $errors->first() }}
                </div>
            @endif
            @if(session('sucesso'))
                <div class="alert alert-success" role="alert">
                    {{ session('sucesso') }}
                </div>
            @endif
                @if(session('erro'))
                    <div class="notification danger">
                        {{ session('erro') }}
                    </div>
                @endif

            <div class="form-info">
                <h3>Entre em contato<span>Estamos aqui para ajudar!</span></h3>
                <form action="{{route('site.store')}}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nome*" type="text" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" placeholder="Email*" type="email" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" id="telephone" placeholder="(99) 99950-5544" type="text" name="telephone" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group">
                                <select class="form-control-select" name="serviceHours" required>
                                    <option value="" disabled selected>Selecione um horário</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <button type="submit">
                                Enviar mensagem
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="thumb col-md-6 col-sm-6 col-md-offset-1">
            <img class="logo-autentic" src="{{asset('assets/img/AP - branco.png')}}" alt="thumb">
        </div>
    </div>
</div>
<style>
    .notification {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .danger {
        color: #ffffff;
        background-color: transparent;
        border-color: #ffffff;
        font-weight: bold;
    }

</style>

<!-- JavaScript -->
<script>
    const telephoneInput = document.getElementById('telephone');

    telephoneInput.addEventListener('input', function (event) {
        const input = event.target;
        const value = input.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

        // Verifica se o valor tem 11 dígitos (incluindo o DDD)
        if (value.length === 11) {
            const formattedValue = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7, 11)}`;
            input.value = formattedValue;
        }

    });
</script>
