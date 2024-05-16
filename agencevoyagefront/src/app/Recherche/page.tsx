"use client";
import axios from "axios";
import React, { use, useEffect, useState } from "react";
import Header from "../Components/Header";
import { CategorieProps, DestinationProps, VoyageProps } from "@/Utils/types";
import categorie from "../Api/Categorie/categorie";

const Voyages = () => {
  const [voyageList, setVoyageList] = useState<VoyageProps[]>([]);
  const [categorieList, setCategorieList] = useState<CategorieProps[]>([]);
  const [destination, setDestinationList] = useState<DestinationProps[]>([]);

  const [categorie, setCategorie] = useState("");

  useEffect(() => {}, []);

  // async function handleSearch() {
  //   if () {
  //     setIsLoading(true);
  //     return axios.get(`http://127.0.0.1:8000/`).then((res) => {
  //       setVoyageList(res.data.Search);
  //       console.log(res.data.Search);
  //     });
  //   }
  // }

  return (
    <body className="">
      <Header></Header>
      <main className="relative  bg-opacity-75 -mt-20 bg-blue-300 m-20 rounded-lg">
        <h2>Recherche</h2>

        <div className="space-y-10 ">
          <div className="flex items-center p-6  bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
            <div className="flex bg-gray-100 p-4 w-64 mr-4 space-x-4 rounded-lg">
              <label htmlFor="Destination"></label>
              <input
                className="bg-gray-100 outline-none text-black"
                type="text"
                placeholder="Destination..."
     
              />
            </div>

            <div className="w-64">
              <label htmlFor="Categorie"></label>
              <select
                className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 pr-2"
                onChange={(e) => {
                  setCategorie(e.target.value);
                }}
                
              >
                {/* {categorieList &&
                  categorieList.map((box: CategorieProps) => {
                    return (
                      <option key={categorie.id} value={categorie.id}>
                        {categorie.nom_categorie}
                      </option>
                    );
                  })} */}
              </select>
            </div>

            <div className="mx-5">
              <label htmlFor="DateDepart"></label>
              <input
                type="date"
                className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 pr-2"
              />
            </div>

            <div className="mx-5">
              <label htmlFor="DateRetour"></label>
              <input
                type="date"
                className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 indent-3 pr-2"
              />
            </div>

            <div>
              <span
                className="bg-green-400 py-3 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer"
                // onClick={() => {
                //   handleSearch();
                // }}
              >
                Search
              </span>
            </div>
          </div>
        </div>
      </main>
    </body>
  );
};

export default Voyages;
