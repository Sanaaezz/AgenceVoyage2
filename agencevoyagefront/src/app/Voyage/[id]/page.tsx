"use client";
import { getVoyageById } from "@/Services/voyage";
import { VoyageProps } from "@/Utils/types";
import Header from "@/app/Components/Header";
import { useEffect, useState } from "react";

const Page = ({ params }: { params: { id: string } }) => {
  const [voyageData, setVoyageData] = useState<VoyageProps>();

  useEffect(() => {
    getVoyageById(params.id).then((res) => {
      setVoyageData(res);
    });
  }, []);



  return (
    <body>
      <Header></Header>
      
      <main className="relative  bg-opacity-75 -mt-20 bg-blue-300 m-20 rounded-lg">
        {voyageData && (
          <div>
            <h1 className="my-8 text-center font-bold text-3xl ">
              {voyageData.nom_voyage}
            </h1>
          <div>
            <img
              src={voyageData.photo_voyage}
              className="object-contain w-screen max-h-96 rounded-md "
            />
            </div>
            
            <div className="flex  justify-end md:flex-col md:w-1/4 md:items-start  md:justify-center w-2/3 mx-auto mt-4 ">
              <p className="my-1">
                <span className="">Duree: </span>
                {voyageData.duree_voyage} jours
              </p>

              <p className="my-1">
                <span className="">Depart</span>
                {new Date(voyageData.dateDepart_voyage).toLocaleDateString(
                  "FR"
                )}
              </p>

              <p className="my-1">
                <span className="">Retour</span>
                {new Date(voyageData.dateRetour_voyage).toLocaleDateString(
                  "FR"
                )}
              </p>

              <p className="my-1">
                <span className="">Categorie</span>
                {voyageData.categorie.nom_categorie}
              </p>
              <p>{voyageData.destination.pays}</p>
            </div>
          </div>
        )}
      </main>
    </body>
  );
};

export default Page;
