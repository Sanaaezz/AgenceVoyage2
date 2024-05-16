export type ButtonProps = {
  title: string;
  route:string;
};

export type CardProps = {
  nom_voyage: string;
  photo_voyage: Text;
  duree_voyage: number;
  destination: string;
};

export type VoyageProps = {
  id: string;
  nom_voyage: string;
  photo_voyage: Text;
  duree_voyage: number;
  dateDepart_voyage: Date;
  dateRetour_voyage: Date;
  description_voyage: string;
  prix_voyage: number;
  categorie: {
    id: string;
    nom_categorie: string;
  };
  destination: {
    id:string;
    pays:string
  };
};

export type CategorieProps = {
  id: string;
  nom_categorie: string;
};

export type DestinationProps ={
  id:string;
  pays: string
}