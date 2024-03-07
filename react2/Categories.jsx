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

    navigate("/souscategories/" + cat.id, { replace: true });
  }
  
  return (
    <>

      <div className='row'>
        
        {
          liste.map((cat, index) => (
            <div key={index} onClick={() => { handleClick(cat)}} className="clickable col-12 col-sm-6 col-md-4 col-xl-3 mb-3">
              
                <div className="card">
                    <img src={cat.image} className="card-img-top" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title">{cat.nom}</h5>
                    </div>
                </div>            
              
            </div>
          ))
        }
      </div>
    </>
    );
}

export default Categories;
