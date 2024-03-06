import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

import axios from 'axios';


function SousCategories() {

  const [liste, setListe] = useState([])

  const { id } = useParams();

  useEffect(()=>{
    console.log("souscategorie.id=" + id)
    axios("https://127.0.0.1:8000/api/sous_categories?categorie.id=" + id,{
      headers: {
        Accept: "application/json"
      }
    })
    .then((reponse)=>{
      setListe(reponse.data);
    })
  }, [])

  return (
    <>

      <div>
        SousCategories
        {
          liste.map((scat, index) => (
            <div key={index} onClick={() => { }}>
              {scat.nom}
            </div>
          ))
        }
      </div>
    </>
    );
}

export default SousCategories;
