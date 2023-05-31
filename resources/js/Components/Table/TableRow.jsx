export const TableRow = ({className, children, ...props}) => {
    return <tr className={className + ' h-12'}>
        {children}
    </tr>
}