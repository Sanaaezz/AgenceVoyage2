import React from "react";

export const CarteCont = ({ children, totalResults }: any) => {
  return (
    <div>
      <h1 className="text-white text-center my-4">
        {totalResults} voyages
      </h1>
      <div className="flex flex-wrap w-11/12 mx-auto my-8 items-center">
        {children}
      </div>
    </div>
  );
};
