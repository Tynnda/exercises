import { ProgressBar } from './ProgressBar';

document.addEventListener('DOMContentLoaded', () => {
  const progressBar = new ProgressBar(4, 2, 30);

  document.body.appendChild(progressBar.element);
});
