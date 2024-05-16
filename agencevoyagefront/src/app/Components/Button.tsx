import { useRouter } from "next/navigation";
import React from "react";



export const Button = ({ title ,route }: ButtonProps) => {
  const { push } = useRouter();
  return (
    <button
      onClick={() => {
        push(route);
      }}
      className={`bg-violet-400 hover:bg-violet-700 active:bg-violet-400 focus:outline-none focus:ring focus:ring-violet-300 rounded-full ml-7 px-4 py-1`}
    >
      {title}
    </button>
  );
};
