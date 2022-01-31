export class Person {
  constructor(firstName, lastName, age) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;

    getFullName() {
      return `${this.firstName} ${this.middleName[0]}. ${this.lastName}`;
    }

    isAdult() {
      return this.age >= 18;
    }

    sayHello() {
      console.log(this.isAdult() ? 'Hello!' : 'Hi!');
    }
  }
}


const john = new Person('John', 'Doe', 18);

