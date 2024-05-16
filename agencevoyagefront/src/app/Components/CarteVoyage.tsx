"use client";
import React, { useEffect, useState } from "react";
import { getAllVoyages } from "../../Services/voyage";
import { VoyageProps } from "@/Utils/types";
import { useRouter } from "next/navigation";



export const Voyages = () => {
  const [voyageList, setVoyageList] = useState<VoyageProps[]>();

      const { push } = useRouter();
      
  useEffect(() => {
    getAllVoyages().then((res: any) => {
      setVoyageList(res.data);
    });
  }, []);

  return (
    <main className="flex min-h-screen flex-col items-center justify-between p-2 text-white">
      <div className="flex items-center flex-wrap w-5/6 my-4">
        {voyageList &&
          voyageList.map((voyage: any ) => {
            return (
              <div key={voyage.id} 
              className="m-6 w-80 h-80">
                <h3 className="text-center py-1">{voyage.nom_voyage}</h3>
                <img
                  src={voyage.photo_voyage}
                  className=" w-full h-48 object-cover rounded-md"
                  onClick={() => {
                    push(`/Voyage/${voyage.id}`);
                  }}
                />
                <p className="text-white">{voyage.categorie.nom_categorie}</p>

                <p className="text-white">{voyage.destination}</p>
                <p className="">{voyage.prix_voyage}</p>
              </div>
            );
          })}
      </div>
    </main>
  );
};

export default Voyages;
