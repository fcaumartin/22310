import React from 'react';
import { Route, Routes } from 'react-router-dom';
import Categories from './Categories';
import SousCategories from './SousCategories';
import ListeProduits from './ListeProduits';
import DetailsProduit from './DetailsProduit';


function App() {
  return (
    <>

      <h1>
        Catalogue
      </h1>
      <Routes>
        <Route path="categories" element={<Categories />} />
        <Route path="souscategories/:id" element={<SousCategories />} />
        <Route path="listeproduits/:id" element={<ListeProduits />} />
        <Route path="detailsproduit/:id" element={<DetailsProduit />} />
      </Routes>
    </>
    );
}

export default App;
