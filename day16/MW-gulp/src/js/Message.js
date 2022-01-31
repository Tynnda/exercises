export class Message{
  constructor(side, name, text) {
    this.side = side;
    this.name = name;
    this.text = text;

    this.messageElement = document.createElement('div');
    this.messageElement.className = `message message--${side}`

    const textElement = document.createElement('div');
    textElement.className = 'message__text';
    textElement.innerText = text;

    this.messageElement.appendChild(textElement);
  }
}


