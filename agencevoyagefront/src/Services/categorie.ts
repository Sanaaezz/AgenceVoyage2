import axios from "axios";

export async function getAllCategorie() {
  let axiosConfig = {
    headers: {
      "content-type": "application/json",
    },
  };
  let url = `${process.env.NEXT_PUBLIC_API_URL}api/categories`;
  return axios.get(url, axiosConfig).then((res) => {
    return res;
  });
}

export async function getCategorieById(id: any) {
  let axiosConfig = {
    headers: {
      "content-type": "application/json",
    },
  };
  let url = `${process.env.NEXT_PUBLIC_API_URL}api/categorie/${id}`;
  return axios.get(url, axiosConfig).then((res) => {
    return res.data;
  });
}
