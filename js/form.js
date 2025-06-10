document.getElementById('form-contato').addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn = document.getElementById('btn-enviar');
    const sucesso = document.querySelector('#sucesso');

    btn.disabled = true;
    btn.value = 'ENVIANDO...';
    const formData = new FormData(this);
    formData.append('acao', 'enviar');

    fetch('classes/Enviar-formulario.php', {
        method: 'POST',
        body: formData
    })
    .then(async res => {
        const text = await res.text();
        try {
            const data = JSON.parse(text);
            if (data.status === 'sucesso') {
                document.getElementById('form-contato').reset();
                sucesso.classList.add('sucess');
                setTimeout(() => sucesso.classList.remove('sucess'), 3700);
            } else {
                console.error('Erro do servidor:', data.mensagem);
            }
        } catch {
            console.error('Resposta não é JSON válido:', text);
        }
    })
    .catch(error => {
        console.error('Erro na requisição: ' + error);
    })
    .finally(() => {
        btn.disabled = false;
        btn.value = 'ENVIAR';
    });
});