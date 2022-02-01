export class ProgressBar {
  constructor(defaultValue, gradient, maximumValue) {
    this.value = defaultValue;
    this.gradient = gradient;
    this.maximumValue = maximumValue;

    this.element = document.createElement('div');
    this.refreshElement();
  }

  refreshElement() {
    this.element.innerHTML = `
      <div class="label">
        ${this.value}/${this.maximumValue}
      </div>
      <div class="progress">
         <div class="btn-minus"></div>
         <div class="bar">
           <div style="width: ${this.value * (100 / this.maximumValue)}%" class="knob"></div>
         </div>
         <div class="btn-plus"></div>
      </div>
    `;

    const plusBtn = this.element.querySelector('.btn-plus');
    plusBtn.addEventListener('click', () => {
      this.value = Math.min(this.maximumValue, this.value + this.gradient);
      this.refreshElement();
    });
    const minusBtn = this.element.querySelector('.btn-minus');
    minusBtn.addEventListener('click', () => {
      this.value = Math.max(0,  this.value - this.gradient);
      this.refreshElement();
    });
  }
}
