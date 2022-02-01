// const loader = document.querySelector('.loader');

const requestData = async (category) => {
  try {
    // loader.classList.add('shown');

    const response = await fetch(`https://classes.codingbootcamp.cz/assets/classes/api/departures.php?cat=${category}`);
    console.log(response);
    const data = await response.json();
    console.log(data);

  } catch (e) {
    console.log(e);
    console.log('there was a problem getting the data.');

  } finally {
    console.log('I dont care if there is an error');
    // loader.classList.remove('shown');
  }

  console.log('last line');
};


requestData('world');
requestData('science');

  // fetch('https://classes.codingbootcamp.caa/assets/classes/api/departures.php')
  //   .then((res) => res.json())
  //   .then((data) => {
  //     console.log(data);
  //   })
  //   .catch((err) => console.log(err))
  //   .finally(() => {
  //     console.log('there was a problem getting the data.');
  //   });
  //
  //
  // console.log('final line');
