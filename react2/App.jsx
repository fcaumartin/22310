import React from 'react';
import { Route, Routes } from 'react-router-dom';
import Categories from './Categories';
import SousCategories from './SousCategories';
import ListeProduits from './ListeProduits';
import DetailsProduit from './DetailsProduit';


function App() {
  return (
    <>

      <div>
        Catalogue
      </div>
      <Routes>
        <Route path="categories" element={<Categories />} />
        <Route path="souscategories/:id" element={<SousCategories />} />
        <Route path="listeproduits" element={<ListeProduits />} />
        <Route path="detailsproduit" element={<DetailsProduit />} />
      </Routes>
    </>
    );
}

export default App;
