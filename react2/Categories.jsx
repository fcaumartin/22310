import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { useNavigate } from "react-router-dom";

function Categories() {

  const [liste, setListe] = useState([])

  const navigate = useNavigate();

  useEffect(() => {
    axios("https://127.0.0.1:8000/api/categories",{
      headers: {
        Accept: "application/json"
      }
    })
    .then((reponse)=>{
      setListe(reponse.data);
    })
  }, [])

  const handleClick = (cat) => {
    console.log(cat)

    navigate("/souscategories/" + cat.id, { replace: true });
  }
  
  
  return (
    <>

      <div>
        Categories
        {
          liste.map((cat, index) => (
            <div key={index} onClick={() => { handleClick(cat)}}>
              {cat.nom}
            </div>
          ))
        }
      </div>
    </>
    );
}

export default Categories;
