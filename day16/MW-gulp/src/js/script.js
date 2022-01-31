import { Conversation } from './Conversation.js';
import { Message } from './Message.js';
import messageDataList from'./conversation.json';

document.addEventListener('DOMContentLoaded', () => {
  const target = document.querySelector('.conversation');

  const conversation = new Conversation(target);

  messageDataList.forEach((messageData, index) => {
    setTimeout(() => {
      const message = new Message(messageData.side, messageData.name, messageData.text);

      conversation.addMessage(message.messageElement);
    }, index * 500);
  });
});

