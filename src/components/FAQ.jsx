import React from "react";
import styled from "styled-components";
import { cardStyles } from "./ReusableStyles";
import { FaChartBar, FaRegHandshake ,FaCartPlus } from "react-icons/fa";

export default function FAQ() {
  return (
    <Section>
      <div className="title">
        <h2>Marketing y atención al cliente</h2>
      </div>
      <div className="analytic ">
        <div className="content">
        <h2>Gestion de Cliente</h2>
        <h5>Gestiona la interaccion que se tendra con los clientes</h5>
        </div>
        <div className="logo">
          <FaRegHandshake />
        </div>
      </div>
      <div className="analytic ">
        <div className="content">
        <h2>Gestion de Adquisiciones e inventario</h2>
        <h5>Gestiona las compras y el inventario de la empresa</h5>
        </div>
        <div className="logo">
          <FaCartPlus />
        </div>
      </div>
      <div className="analytic ">
        <div className="content">
        <h2>Gestion de Contabilidad</h2>
        <h5>Gestiona la contabilidad de la empresa</h5>
        </div>
        <div className="logo">
          <FaChartBar />
        </div>
      </div>
    </Section>
  );
}
const Section = styled.section`
  ${cardStyles};
  .title {
    h2 {
      color: #1A9DA5;
      font-family: "Permanent Marker", cursive;
      letter-spacing: 0.3rem;
    }
  }
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
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1.5rem;
      svg {
        font-size: 3rem;
      }
    }
  @media screen and (min-width: 280px) and (max-width: 1080px) {
    svg {
      font-size: 2rem !important;
    }
  }
`;
