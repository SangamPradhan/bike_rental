/* Before and After Slider */

const slider = document.querySelector(".slider1 .slider input");
const img = document.querySelector(".slider1 .images .img-2");
const dragLine = document.querySelector(".slider1 .slider .drag-line");
slider.oninput = () => {
  let sliderVal = slider.value;
  dragLine.style.left = sliderVal + "%";
  img.style.width = sliderVal + "%";
};

const slider2 = document.querySelector(".slider2 .slider input");
const img2 = document.querySelector(".slider2 .images .img-2");
const dragLine2 = document.querySelector(".slider2 .slider .drag-line");
slider2.oninput = () => {
  let sliderVal2 = slider2.value;
  dragLine2.style.left = sliderVal2 + "%";
  img2.style.width = sliderVal2 + "%";
};
