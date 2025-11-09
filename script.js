function addExperiencia() {
    const experiencias = document.getElementById('experiencias');
    const divExp = document.createElement('div');
    divExp.classList.add('experiencia');
    divExp.innerHTML = `
       <div class="section">
        <h2>Experiências Profissionais</h2>
        <div id="experiencias">
            <div class="experiencia">
        <label>Cargo:
                <input type="text" name="cargo[]">
            </label>
            <label>Empresa:
                <input type="text" name="empresa[]">
            </label>
            <label>Período:
                <input type="number" name="periodo[]">
            </label>
        </div>
    </div>
    `;
    experiencias.appendChild(divExp);
}

function addFormacao() {
    const formacoes = document.getElementById('formacoes');
    const divForm = document.createElement('div');
    divForm.classList.add('formacao');
    divForm.innerHTML = `
       <div class="section">
        <h2>Formação Acadêmica</h2>
        <div id="formacoes">
            <div class="formacao">
        <label>Curso:
            <input type="text" name="curso[]">
        </label>
        <label>Instituição:
            <input type="text" name="instituicao[]">
        </label>
        <label>Ano de Conclusão:
            <input type="number" name="conclusao[]">
        </label>
        </div>
    </div>
    `;
    formacoes.appendChild(divForm);
}



function calcularIdade() {
    const nascimento = document.getElementById('nasc').value;
    if (!nascimento) return;

    const dataNasc = new Date(nascimento);
    const hoje = new Date();

    let idade = hoje.getFullYear() - dataNasc.getFullYear();
    const mes = hoje.getMonth() - dataNasc.getMonth();

    // Ajusta caso o usuário ainda não fez aniversário este ano
    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
        idade--;
    }

    document.getElementById('idade').value = idade;
}