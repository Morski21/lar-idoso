@extends('layouts.simple')

@section('title', 'Fazer Doação - Lar dos Idosos')

@section('content')
<main class="main-content" style="padding: 100px 0; min-height: 100vh;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start;">
        <div class="form-section" style="background: white; padding: 48px; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); border: 1px solid #e5e7eb;">
            <div class="form-header" style="margin-bottom: 32px;">
                <h1 class="form-title" style="font-size: 2rem; font-weight: 700; color: #111827; margin-bottom: 8px;">Fazer Doação</h1>
                <p class="form-subtitle" style="color: #4b5563; font-size: 1.125rem;">Preencha seus dados para continuar com a doação</p>
            </div>
            
            <form action="#" method="POST">
                @csrf
                <div class="form-group" style="margin-bottom: 24px;">
                    <label for="nome" style="display: block; margin-bottom: 8px; font-weight: 600; color: #374151; font-size: 0.875rem;">Nome *</label>
                    <input type="text" id="nome" name="nome" required style="width: 100%; padding: 12px 16px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; transition: all 0.2s; background: white;">
                </div>
                
                <div class="form-group" style="margin-bottom: 24px;">
                    <label for="email" style="display: block; margin-bottom: 8px; font-weight: 600; color: #374151; font-size: 0.875rem;">Email *</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 12px 16px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; transition: all 0.2s; background: white;">
                </div>
                
                <div class="form-group" style="margin-bottom: 24px;">
                    <label for="telefone" style="display: block; margin-bottom: 8px; font-weight: 600; color: #374151; font-size: 0.875rem;">Número de Telefone *</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required style="width: 100%; padding: 12px 16px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; transition: all 0.2s; background: white;">
                </div>
                
                <div class="form-group" style="margin-bottom: 24px;">
                    <label for="nascimento" style="display: block; margin-bottom: 8px; font-weight: 600; color: #374151; font-size: 0.875rem;">Data de Nascimento *</label>
                    <input type="text" id="nascimento" name="nascimento" placeholder="DD/MM/AAAA" required style="width: 100%; padding: 12px 16px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; transition: all 0.2s; background: white;">
                </div>
                
                <div class="form-group" style="margin-bottom: 24px;">
                    <label for="sexo" style="display: block; margin-bottom: 8px; font-weight: 600; color: #374151; font-size: 0.875rem;">Sexo *</label>
                    <select id="sexo" name="sexo" required style="width: 100%; padding: 12px 16px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; transition: all 0.2s; background: white;">
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
                
                <div class="checkbox-group" style="margin: 24px 0;">
                    <label style="display: flex; align-items: flex-start; gap: 12px; font-size: 14px; cursor: pointer; color: #374151; line-height: 1.5;">
                        <input type="checkbox" name="voluntario" style="width: 18px; height: 18px; margin: 0; accent-color: #f97316;">
                        Desejo ser voluntário
                    </label>
                </div>
                
                <div class="checkbox-group" style="margin: 24px 0;">
                    <label style="display: flex; align-items: flex-start; gap: 12px; font-size: 14px; cursor: pointer; color: #374151; line-height: 1.5;">
                        <input type="checkbox" name="comunicacoes" style="width: 18px; height: 18px; margin: 0; accent-color: #f97316;">
                        Nós adoraríamos poder entrar em contato com você sobre esta e outras campanhas. (?)
                    </label>
                    <div style="margin-left:30px;margin-top:8px">
                        <label style="display: flex; align-items: flex-start; gap: 12px; font-size: 14px; cursor: pointer; color: #374151; line-height: 1.5;">
                            <input type="checkbox" name="aceita_comunicacoes" style="width: 18px; height: 18px; margin: 0; accent-color: #f97316;">
                            Sim, por favor. Desejo receber essas comunicações.
                        </label>
                    </div>
                </div>
                
                <div class="checkbox-group" style="margin: 24px 0;">
                    <label style="display: flex; align-items: flex-start; gap: 12px; font-size: 14px; cursor: pointer; color: #374151; line-height: 1.5;">
                        <input type="checkbox" name="privacidade" required style="width: 18px; height: 18px; margin: 0; accent-color: #f97316;">
                        Li e aceito as <a href="#" style="color: #f97316;">Políticas de Privacidade</a>. (?)
                    </label>
                </div>
                
                <button type="submit" class="btn-donate" style="background: #f97316; color: white; border: none; padding: 16px 32px; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; width: 100%; margin-top: 24px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(249, 115, 22, 0.2);">Fazer Doação</button>
            </form>
            
            <div class="progress" style="display: flex; justify-content: center; align-items: center; margin-top: 40px; gap: 16px; flex-wrap: wrap;">
                <div class="progress-step" style="display: flex; align-items: center; gap: 8px;">
                    <div class="progress-circle active" style="width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; transition: all 0.3s; background: #f97316; color: white; box-shadow: 0 2px 4px rgba(249, 115, 22, 0.3);">1</div>
                    <span class="progress-text" style="font-size: 12px; font-weight: 500; color: #4b5563;">DADOS PESSOAIS</span>
                </div>
                <div class="progress-line active" style="width: 32px; height: 2px; background: #f97316; transition: all 0.3s;"></div>
                <div class="progress-step" style="display: flex; align-items: center; gap: 8px;">
                    <div class="progress-circle inactive" style="width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; transition: all 0.3s; background: #d1d5db; color: #4b5563;">2</div>
                    <span class="progress-text" style="font-size: 12px; font-weight: 500; color: #4b5563;">DADOS DOAÇÃO</span>
                </div>
                <div class="progress-line" style="width: 32px; height: 2px; background: #d1d5db; transition: all 0.3s;"></div>
                <div class="progress-step" style="display: flex; align-items: center; gap: 8px;">
                    <div class="progress-circle inactive" style="width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; transition: all 0.3s; background: #d1d5db; color: #4b5563;">3</div>
                    <span class="progress-text" style="font-size: 12px; font-weight: 500; color: #4b5563;">DADOS ENDEREÇO</span>
                </div>
            </div>
        </div>

        <div class="image-section" style="background: url('https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=1000&auto=format&fit=crop') center/cover; border-radius: 16px; position: relative; min-height: 600px; display: flex; align-items: center; justify-content: center;">
            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(249, 115, 22, 0.8), rgba(234, 88, 12, 0.8)); border-radius: 16px;"></div>
            <div class="image-content" style="position: relative; z-index: 2; text-align: center; color: white; padding: 48px;">
                <h2 class="image-title" style="font-size: 2.5rem; font-weight: 800; margin-bottom: 16px; text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Sua Doação Faz a Diferença</h2>
                <p class="image-subtitle" style="font-size: 1.25rem; opacity: 0.9; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);">Cada contribuição nos ajuda a continuar oferecendo cuidado, carinho e dignidade aos nossos idosos</p>
            </div>
        </div>
    </div>
</main>
@endsection

