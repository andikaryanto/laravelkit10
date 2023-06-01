import { TableHeader } from "./TableHeader";
import { TableRow } from "./TableRow";

export const Table = ({columns, body, children, ...props}) => {
    const headers = columns.map((e, i) => {
        return <TableHeader key={i}>{e}</TableHeader>
    });

    return <div className="container bg-white rounded-t-xl shadow-shadow shadow-xl">
        <table className=" w-full">
            <thead className="h-12">
                <TableRow>
                    {headers}
                </TableRow>
            </thead>
            <tbody className="h-14">
            {children}
            </tbody>
        </table>
    </div>;
}