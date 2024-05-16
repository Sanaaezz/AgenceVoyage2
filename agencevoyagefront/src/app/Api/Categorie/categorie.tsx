import { getAllCategorie } from "@/Services/categorie";
import { useEffect, useState } from "react";


const categorie = () => {
  const [categorieList, setCategorieList] = useState([]);

  useEffect(() => {
    getAllCategorie().then((res: any) => {
      setCategorieList(res.data);
    });
  }, []);

  return <div>categorie</div>;
};

export default categorie;
