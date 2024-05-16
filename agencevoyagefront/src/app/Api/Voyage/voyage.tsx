import { getAllVoyages } from "@/Services/voyage";
import React, { useEffect, useState } from "react";

const voyage = () => {
  const [voyagesList, setVoyagesList] = useState([]);

  useEffect(() => {
    getAllVoyages().then((res: any) => {
      setVoyagesList(res.data);
    });
  }, []);

  return <div>voyage</div>;
};

export default voyage;
