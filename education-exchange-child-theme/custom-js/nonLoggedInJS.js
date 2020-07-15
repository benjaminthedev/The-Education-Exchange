// console.log('COD - MW');

const newBtn = document.createElement('li');

newBtn.classList = 'ursc-login-media-cco ursc-login-media';

newBtn.innerHTML = '<a href="https://theeducation.exchange/wp/wp-login.php?saml_sso" class="ssoBtn"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Chartered College Member Login</a>';

console.log(newBtn);


//Insert Before

const container = document.querySelector('.ursc-network-lists');
const li = document.querySelector('.ursc-login-media--facebook');
console.log(container);


container.insertBefore(newBtn, li);

