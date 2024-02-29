import React from 'react';

import { useState } from "react";

function Exo1() {

  const [nom, setNom] = useState("")
  const [prenom, setPrenom] = useState("")

  const handleChangeNom = (evt) => {
    setNom(evt.target.value)
  }

  const handleChangePrenom = (evt) => {
    setPrenom(evt.target.value)
  }

  return (
      <>
        <h2>Exercice 1</h2>

        <input type="text" value={nom} onChange={handleChangeNom}/>
        <input type="text" value={prenom} onChange={handleChangePrenom}/>
        <div>
          Bonjour {nom} {prenom}
        </div>
      </>
    );
}

export default Exo1;
