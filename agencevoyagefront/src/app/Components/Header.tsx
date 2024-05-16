import React from 'react'
import { Button } from './Button';
import { useRouter } from 'next/navigation';
import { Caveat, Inter } from "next/font/google";

const caveat = Caveat({
  weight: ["400", "700"],
  style: ["normal"],
  subsets: ["latin"],
  // display: "swap",
});
const Header = () => {

 const { push } = useRouter();

  return (
    <header className="bg-[url('/elizabeth-camp.jpg')] bg-cover h-80 ">
      <nav className=" w-full flex flex-row justify-between">
        <div className=" lg:text-4xl sm:text-2xl p-6">
          <p className={`${caveat.className}`}>LOIN D ici</p>
        </div>
        <div className="p-6">
          <Button title={"Accueil"} route={"/"}></Button>
          {/* <Button title={"Details"} route={"Details/{id}"}></Button> */}
          <Button title={"Contact"} route={"Contact"}></Button>
          <Button title={"Recherche"} route={"Recherche"}></Button>
        </div>
      </nav>

      <div className={`${caveat.className} lg:text-[90px] sm:text-[60px] mx-auto `}>
        <p className="flex justify-center pt-10">
          {" "}
          Le Plaisir d'etre . . . LOIN D'ici
        </p>
      </div>
    </header>
  );
}

export default Header