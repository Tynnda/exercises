export class Conversation {
  constructor(targetElem) {
    this.targetElem = targetElem;
  }

  addMessage(message) {
    this.targetElem.appendChild(message);
  }
}
