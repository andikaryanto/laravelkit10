
import { FaSearch } from 'react-icons/fa';

import imgavatr from '../../../assets/img/avatars/avatar.jpg';
import SmallCircleAvatar from '../Avatar/SmallCircleAvatar';
export const NavBar = () => {
    return (
        <div className="flex items-center justify-between px-6 py-4">
            {/* Your navigation bar content */}

            <div >
                <div>path / to</div>
                <div className="font-bold capitalize text-[33px]">Dashboard</div>
            </div>
            <div className="flex bg-white items-center h-auto shadow-xl shadow-slate-200 px-4 py-2 rounded-full">
                <div className="flex h-full items-center rounded-full bg-light-green text-navy-700 dark:bg-navy-900 dark:text-white xl:w-[225px] mr-2">
                    <p className="pl-3 pr-2 text-xl">
                        {/* <FiSearch className="h-4 w-4 text-gray-400 dark:text-white" /> */}
                        <FaSearch className='text-gray-400'/>
                    </p>
                    <input
                        type="text"
                        placeholder="Search..."
                        className="border-none focus:ring-0 outline-none rounded-full bg-light-green w-full focus:outline-none"
                        // className="block h-full w-full rounded-full bg-green text-sm font-medium text-navy-700 outline-none placeholder:!text-gray-400 dark:bg-navy-900 dark:text-white dark:placeholder:!text-white sm:w-fit"
                    />
                </div>
                <SmallCircleAvatar altText={'user'} imageUrl={imgavatr} />
            </div>
        </div>
    );
}