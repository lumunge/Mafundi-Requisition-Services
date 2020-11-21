//Frature One
import React from 'react';
import Products from './Components/Products';
import data from './data.json';


class App extends React.Component {
  constructor(){
    super();
    this.state = {
      products : data.products,
      size: "",
      sort: "",
    };
  }


  render(){
  return (
    <div className="grid-container">
      <header>
        <a href="/">React Shopping</a>
      </header>
      <main>
        <div className="content">
          <div className="mainContent">
            <Products products={this.state.products} />
          </div>
          <div className="sideBar">
            Cart Items
          </div>
        </div>
      </main>
      <footer>
        All rights are Reserved
      </footer>
    </div>
  );
  }
}

export default App;
