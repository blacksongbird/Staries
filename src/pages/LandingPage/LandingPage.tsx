import React, { FC } from 'react';
import styles from './LandingPage.module.scss';

interface LandingPageProps {}

const LandingPage: FC<LandingPageProps> = () => (
  <div className={styles.LandingPage}>
    LandingPage Component
  </div>
);

export default LandingPage;
