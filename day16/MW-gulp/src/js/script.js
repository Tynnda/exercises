import messageList from'./conversation.json';

document.addEventListener('DOMContentLoaded', () => {
  const target = document.querySelector('.conversation');

  messageList.forEach((message, index) => {
    setTimeout(() => showMessage(message), index * 500);
  });

  const showMessage = (message) => {
    target.innerHTML += `
        <div class="message message--${message.side}">
            <div class="message__text">
                ${message.text}
            </div>
        </div>
    `;
  };
});

