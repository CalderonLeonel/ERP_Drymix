import React from "react";
import styled from "styled-components";
import { FaFileAlt, FaMoneyCheckAlt, FaUserFriends, FaIndustry } from "react-icons/fa";
import { cardStyles } from "./ReusableStyles";
export default function Analytics() {
  return (
    <Section>
      <div className="analytic ">
        <div className="content">
          <h2>Gestion de Documentación</h2>
          <h5>Gestiona la Documentacion de la empresa</h5>
        </div>
        <div className="logo">
          <FaFileAlt />
        </div>
      </div>
      <div className="analytic">
        <div className="logo">
          <FaMoneyCheckAlt />
        </div>
        <div className="content">
          <h2>Gestion de Finanzas</h2>
          <h5>Gestiona las finanzas de la empresa</h5>
        </div>
      </div>
      <div className="analytic">
        <div className="logo">
          <FaUserFriends />
        </div>
        <div className="content">
        <h2>Gestion de Cuentas de Usuario</h2>
        <h5>Gestiona a los distintos usuarios que tiene el sistema</h5>
        </div>
      </div>
      <div className="analytic ">
        <div className="content">
        <h2>Gestion de Produccion</h2>
        <h5>Gestiona las distintas fases de produccion del sistema</h5>
        </div>
        <div className="logo">
          <FaIndustry />
        </div>
      </div>
    </Section>
  );
}
const Section = styled.section`
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
  .analytic {
    ${cardStyles};
    padding: 1rem;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    gap: 1rem;
    transition: 0.5s ease-in-out;
    &:hover {
      background-color: #1A9DA5;
      color: black;
      svg {
        color: white;
      }
    }
    .logo {
      background-color: black;
      border-radius: 3rem;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1.5rem;
      svg {
        font-size: 1.5rem;
      }
    }
  }

  @media screen and (min-width: 280px) and (max-width: 720px) {
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    .analytic {
      &:nth-of-type(3),
      &:nth-of-type(4) {
        flex-direction: row-reverse;
      }
    }
  }
`;
