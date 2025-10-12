import React, { createContext, useContext } from 'react';

type AppContextType = {
    initialData: any;
};

const AppContext = createContext<AppContextType>({ initialData: {} } as AppContextType);

export const AppProvider = ({ children, initialData }: any) => {
    return <AppContext.Provider value={{ initialData }}>{children}</AppContext.Provider>;
};

export const useApp = () => useContext(AppContext);
