document.getElementById('formulario').addEventListener('submit', function(event) {
    var nome = document.querySelector('input[name="nome"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var telefone = document.querySelector('input[name="telefone"]').value;
    var regiao = document.querySelector('select[name="regiao"]').value;
  
    if (nome === "" || email === "" || telefone === "" || regiao === "") {
      event.preventDefault();
      alert("Por favor, preencha todos os campos.");
    }
  });
  