// Seleciona o elemento da mensagem de alerta
const alertElement = document.querySelector('#alert');

// Exibe a mensagem de alerta
alertElement.style.display = 'block';

// Agenda a remoção da mensagem de alerta após 5 segundos (5000 ms)
setTimeout(function() {
  alertElement.style.display = 'none';
}, 4000);