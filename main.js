const domContainer = document.querySelector('#reactnav') ;
const menu1 = domContainer.dataset.menu1;
const menu2 = domContainer.dataset.menu2;
const url1 = domContainer.dataset.url1;
const url2 = domContainer.dataset.url2;

const element = (
    
      <h1>Bonjour, monde !</h1>
    
  );

ReactDOM.render(element,document.getElementById('#reactnav'));
// ReactDOM.render(<reactnav menu1 ={menu1} url1 ={url1} menu2 ={menu2} url21 ={url2}/>);



// const domContainer = document.querySelector('#like_button_container');
// ReactDOM.render(e(LikeButton), domContainer);
