export const RoundedCard = ({children, ...props}) => {
    return <div className="bg-white mr-4 shadow-xl rounded-2xl shadow-shadow p-4 mb-5">
        {children}
    </div>;
}