import AssigneeIcon from "../../components/icons/AssigneeIconc";
import GalleryIcon from "../../components/icons/GalleryIcon";
import RecomendationIcon from "../../components/icons/RecomendationIcon";
import TechStackIcon from "../../components/icons/TechStackIcon";


const onglets = [
    {
        name: "Technologies",
        icons: TechStackIcon
    },
    {
        name: "Recommandation",
        icons: RecomendationIcon
    },
    {
        name: "Assignées",
        icons: AssigneeIcon
    },
    {
        name: "Gallery",
        icons: GalleryIcon
    }
];
const FicheProjet = () => {


    return (
        <>
            <div className="flex flex-col">
                {/* Project title */}
                <div className="project-title">
                <h3 className="text-4xl font-bold dark:text-white">
                    Projet d'assainissement des eaux
                </h3>
                </div>
                {/* End project title */}
                <div className="text">
                <p className="text-start">
                    Pour le compte de notre client XXX, une application web a été
                    demandé pour gérer les états des eaux dans la ville d'antananarivo
                </p>
                </div>
                <div className="onglet">
                    <div  className="border-b border-gray-200 dark:border-gray-700">
                        <ul  className="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                            
                            {
                                onglets.map( onglet => (
                                    <li  className="me-2">
                                        <a
                                        href="#"
                                        className="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                                        >
                                            <onglet.icons classes="w-5 h-5 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" />
                                            {onglet.name}
                                        </a>
                                    </li>
                                ) )
                            }
                            
                        </ul>
                    </div>
                </div>
                <div className="required-skill">
                Mila alaina avy ato ny liste ana skills rehetra ilaina Ataontsika sous
                forme ana tableau ilay izy
                <table className="table">
                    <thead>
                    <tr>
                        <th>Nom Skill</th>
                        <th>Niveau Requis</th>
                        <th>Categorie</th>
                        <th>Employé requis</th>
                        <th></th>
                        <th></th>
                        <th>
                        <button type="button">Ajouter</button>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Java</td>
                        <td>Modéré</td>
                        <td>Développement</td>
                        <td>3</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                Lasa misy Overview zany Eto // Lasa afaka mijery an'ireo mpiasa oan'ilay
                projet izy avy Eto // Andao aloha zany anamboatra design fotsiny
            </div>
        </>
    );
};

export default FicheProjet;
