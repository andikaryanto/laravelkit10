import { RoundedButton } from "./RoundedButton";

export const ClearButton = ({children, ...props}) => {
    return <RoundedButton {...props}>{children}</RoundedButton>;
}