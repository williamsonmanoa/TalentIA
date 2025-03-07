import axios from "axios";
import BASE_URL from "./api";
import { Projet } from "../types/projet";

const getProjects = async () : Promise<Projet[]> => {

    const url = `${BASE_URL}/projects`;

    const result = await axios.get<Projet[]>(url);

    return result.data;

};

const addProject = async ( skill: Projet ) => {
    const url = `${BASE_URL}/projects`;
    
    const result = await axios.post(url, skill, {
        headers: {
            "Content-Type": "application/json"
        }
    });

    return result.data;
};


const updateProject = async ( skill: Projet ) => {
    const url = `${BASE_URL}/projects/${skill.id}`;
    
    const result = await axios.put(url, skill, {
        headers: {
            "Content-Type": "application/json"
        }
    });

    return result.data;
};

const deleteProject = async ( id: number ) => {
    const url = `${BASE_URL}/projects/${id}`;
    
    const result = await axios.delete(url);

    return result.data;
};

export {
    getProjects,
    addProject,
    updateProject,
    deleteProject
}