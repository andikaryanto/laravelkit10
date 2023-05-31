import { TableHeader } from "./TableHeader";

export const Table = ({columns, body, children, ...props}) => {
    const headers = columns.map((e, i) => {
        return <TableHeader>{e}</TableHeader>
    });

    return <div className="container bg-white rounded-t-xl shadow-shadow shadow-xl">
        <table className=" w-full">
            <thead className="h-12">
                {headers}
            </thead>
            <tbody className="h-14">
            {children}
            </tbody>
        </table>
    </div>;
}