import React from 'react';

import { useState } from "react";

function Exo3() {

  const [liste, setListe] = useState(['aaa', 'bbb', 'ccc', 'aaa']);
  const [texte, setTexte] = useState("")

  const handleChange = (evt) => {
    setTexte(evt.target.value)
  }

  const handleClick = () => {
    // let tmp = [...liste]
    // tmp.push(texte)
    // setListe(tmp)
    setListe([texte, ...liste])
  }

  return (
      <>
        <h2>Exercice 3</h2>

        <input type="text" value={texte} onChange={handleChange}/>
        <button onClick={handleClick}>Ajouter !</button>

        <div>
          {
            liste.map( (element, index) => 
              (
                <div key={index}>
                  {element}
                </div>
              )
            )
          }
        </div>
      </>
    );
}

export default Exo3;
