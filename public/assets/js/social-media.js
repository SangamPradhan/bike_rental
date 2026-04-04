// share on social media

// const link = encodeURI(window.location.href);
const link = "https://www.mayoclinic.org/about-mayo-clinic";



const fb = document.querySelector('.facebook');
fb.href = `https://www.facebook.com/share.php?u=${link}`;


const twitter = document.querySelector('.twitter');
twitter.href =  `http://twitter.com/share?&url=${link}`;


const linkedIn = document.querySelector('.linkedin');
linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;
