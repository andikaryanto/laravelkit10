import { Devider } from "../Devider/Devider";
import { FaBox, FaUser } from 'react-icons/fa';

export const SideNav = () => {
    return (
        <div className="h-screen w-72 bg-white flex flex-col px-4">
            {/* Your side navigation content */}
            <div className="flex flex-row text-[24px] mb-8">
                <div className="py-2 font-bold mx-auto">
                    COOL
                    <span className="font-normal">
                        UI
                    </span>
                </div>
            </div>
            <Devider/>
            <div className="container pl-4">
                <div className="text-gray-500 mb-2">MAIN MENU</div>
                <div className="flex flex-row pl-2 mb-3 items-center">
                    <FaBox/>
                    <div className="ml-3"> Dashboard </div>
                </div>
                <div className="flex flex-row pl-2 mb-3 items-center">
                    <FaUser/>
                    <div className="ml-3"> User </div>
                </div>
            </div>
        </div>
    );
}