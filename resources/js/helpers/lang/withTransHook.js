import i18n from '../lang/i18n';
import { useTranslation } from "react-i18next";
import React from 'react';

export default function withTransHook(Component) {
    return function WrappedComponent(props) {
      const lang =  props.lang ?? 'en';
      i18n.changeLanguage(lang);
      const { t } = useTranslation();
      return <Component {...props} trans={t} i18n={i18n} />;
    }
  }